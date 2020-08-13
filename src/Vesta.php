<?php

namespace SteadfastCollective\Vesta;

use GuzzleHttp\Client;

class Vesta
{
    public $client;
    protected $username;
    protected $password;

    const OK = 0;
    const E_ARGS = 1;
    const E_INVALID = 2;
    const E_NOTEXIST = 3;
    const E_EXISTS = 4;
    const E_SUSPENDED = 5;
    const E_UNSUSPENDED = 6;
    const E_INUSE = 7;
    const E_LIMIT = 8;
    const E_PASSWORD = 9;
    const E_FORBIDDEN = 10;
    const E_DISABLED = 11;
    const E_PARSING = 12;
    const E_DISK = 13;
    const E_LA = 14;
    const E_CONNECT = 15;
    const E_FTP = 16;
    const E_DB = 17;
    const E_RRD = 18;
    const E_UPDATE = 19;
    const E_RESTART = 20;

    /**
     * Create a new Vesta Instance.
     */
    public function __construct($host, $username, $password, $port = '8083', $path = 'api', $protocol = 'https')
    {
        $this->client = new Client(['base_uri' => "{$protocol}://{$host}:{$port}/{$path}/", 'verify' => false]);
        $this->username = $username;
        $this->password = $password;
    }

    public function request($data)
    {
        $data = array_merge(
            [
                'user' => $this->username,
                'password' => $this->password,
                'returncode' => 'yes',
            ],
            $data
        );

        $response = $this->client->request('POST', 'index.php', [
            'form_params' => $data,
        ]);

        if ($data['returncode'] == 'yes') {
            switch ((string) $response->getBody()) {
                case self::OK:
                    return;

                case self::E_ARGS:
                    throw new \SteadfastCollective\Vesta\Exceptions\NotEnoughArgumentsException('Not enough arguments provided');
                    break;

                case self::E_INVALID:
                    throw new \SteadfastCollective\Vesta\Exceptions\InvalidObjectOrArgumentException('Object or argument is not valid');
                    break;

                case self::E_NOTEXIST:
                    throw new \SteadfastCollective\Vesta\Exceptions\ObjectDoesntExistException("Object doesn't exist");
                    break;

                case self::E_EXISTS:
                    throw new \SteadfastCollective\Vesta\Exceptions\ObjectAlreadyExistsException('Object already exists');
                    break;

                case self::E_SUSPENDED:
                    throw new \SteadfastCollective\Vesta\Exceptions\ObjectIsSuspendedException('Object is suspended');
                    break;

                case self::E_UNSUSPENDED:
                    throw new \SteadfastCollective\Vesta\Exceptions\ObjectAlreadyUnsuspendedException('Object is already unsuspended');
                    break;

                case self::E_INUSE:
                    throw new \SteadfastCollective\Vesta\Exceptions\ObjectInUseException("Object can't be deleted because is used by the other object");
                    break;

                case self::E_LIMIT:
                    throw new \SteadfastCollective\Vesta\Exceptions\ReachedHostingPackageLimitsException('Object cannot be created because of hosting package limits');
                    break;

                case self::E_PASSWORD:
                    throw new \SteadfastCollective\Vesta\Exceptions\WrongPasswordException('Wrong password');
                    break;

                case self::E_FORBIDDEN:
                    throw new \SteadfastCollective\Vesta\Exceptions\ObjectCannotBeAccessedException('Object cannot be accessed be the user');
                    break;

                case self::E_DISABLED:
                    throw new \SteadfastCollective\Vesta\Exceptions\SubsystemDisabledException('Subsystem is disabled');
                    break;

                case self::E_PARSING:
                    throw new \SteadfastCollective\Vesta\Exceptions\ConfigurationBrokenException('Configuration is broken');
                    break;

                case self::E_DISK:
                    throw new \SteadfastCollective\Vesta\Exceptions\NotEnoughDiskSpaceException('Not enough disk space to complete the action');
                    break;

                case self::E_LA:
                    throw new \SteadfastCollective\Vesta\Exceptions\ServerTooBusyException('Server is to busy to complete the action');
                    break;

                case self::E_CONNECT:
                    throw new \SteadfastCollective\Vesta\Exceptions\HostUnreachableException('Connection failed. Host is unreachable');
                    break;

                case self::E_FTP:
                    throw new \SteadfastCollective\Vesta\Exceptions\FtpServerNotRespondingException('FTP server is not responding');
                    break;

                case self::E_DB:
                    throw new \SteadfastCollective\Vesta\Exceptions\DatabaseServerNotRespondingException('Database server is not responding');
                    break;

                case self::E_RRD:
                    throw new \SteadfastCollective\Vesta\Exceptions\RDDToolFailedToUpdateDatabaseException('RRDtool failed to update the database');
                    break;

                case self::E_UPDATE:
                    throw new \SteadfastCollective\Vesta\Exceptions\UpdateOperationFailedException('Update operation failed');
                    break;

                case self::E_RESTART:
                    throw new \SteadfastCollective\Vesta\Exceptions\ServiceRestartFailedException('Service restart failed');
                    break;

                default:
                    throw new \Exception('An Error Occured.', (int) $response);
                    break;
            }
        }

        return (string) $response->getBody();
    }
}
