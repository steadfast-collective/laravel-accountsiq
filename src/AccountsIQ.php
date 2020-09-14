<?php

namespace SteadfastCollective\AccountsIQ;

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
        // TODO: maybe add some caching to make sure we are not requesting a new token for every single request
        $client = new SoapClient($this->wsdlUrl, $this->getParams());

        // TODO: allow for user to pass in the key of the account they want to fetch details of
        $account = config('accountsiq.accounts')[0];

        return $client->Login([
            'companyID'  => $account['company_id'],
            'partnerKey' => $account['partner_key'],
            'userKey'    => $account['user_key'],
        ])->LoginResult;
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
