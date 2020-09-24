<?php

namespace SteadfastCollective\AccountsIQ;

use Illuminate\Support\Facades\Cache;
use SoapClient;

class AccountsIQ
{
    protected $wsdlUrl = 'https://hostacct.com/system/dashboard/integration/integration_1_1.asmx?wsdl';

    public function request(string $function, array $params = [])
    {
        $client = new SoapClient($this->wsdlUrl, $this->getParams());

        $params['token'] = $this->obtainToken();

        $response = $client->{$function}($params);

        return json_decode(json_encode($response), true);
    }

    protected function obtainToken()
    {
        $account = config('accountsiq.accounts')[config('accountsiq.account')];
        $cacheKey = 'accountsiq.'.$account['company_id'];

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $client = new SoapClient($this->wsdlUrl, $this->getParams());

        $token = $client->Login([
            'companyID'  => $account['company_id'],
            'partnerKey' => $account['partner_key'],
            'userKey'    => $account['user_key'],
        ])->LoginResult;

        Cache::put($cacheKey, $token, 20 * 60);

        return $token;
    }

    protected function getParams(): array
    {
        return [
            'soap_version'   => SOAP_1_1,
            'exceptions'     => true,
            'trace'          => 0,
            'cache_wsdl'     => WSDL_CACHE_NONE,
            'stream_context' => stream_context_create([
                'ssl'  => [
                    'verify_peer'      => true,
                    'verify_peer_name' => true,
                    'crypto_method'    => STREAM_CRYPTO_METHOD_TLS_CLIENT,
                ],
                'http' => [
                    'user_agent' => 'PHPSoapClient',
                ],
            ]),
        ];
    }
}
