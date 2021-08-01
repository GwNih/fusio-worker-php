<?php
namespace Fusio\Worker\Generated;

/**
 * Autogenerated by Thrift Compiler (0.14.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class Context
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'routeId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'baseUrl',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'app',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Fusio\Worker\Generated\App',
        ),
        4 => array(
            'var' => 'user',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Fusio\Worker\Generated\User',
        ),
    );

    /**
     * @var int
     */
    public $routeId = null;
    /**
     * @var string
     */
    public $baseUrl = null;
    /**
     * @var \Fusio\Worker\Generated\App
     */
    public $app = null;
    /**
     * @var \Fusio\Worker\Generated\User
     */
    public $user = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['routeId'])) {
                $this->routeId = $vals['routeId'];
            }
            if (isset($vals['baseUrl'])) {
                $this->baseUrl = $vals['baseUrl'];
            }
            if (isset($vals['app'])) {
                $this->app = $vals['app'];
            }
            if (isset($vals['user'])) {
                $this->user = $vals['user'];
            }
        }
    }

    public function getName()
    {
        return 'Context';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->routeId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->baseUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->app = new \Fusio\Worker\Generated\App();
                        $xfer += $this->app->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->user = new \Fusio\Worker\Generated\User();
                        $xfer += $this->user->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('Context');
        if ($this->routeId !== null) {
            $xfer += $output->writeFieldBegin('routeId', TType::I64, 1);
            $xfer += $output->writeI64($this->routeId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->baseUrl !== null) {
            $xfer += $output->writeFieldBegin('baseUrl', TType::STRING, 2);
            $xfer += $output->writeString($this->baseUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->app !== null) {
            if (!is_object($this->app)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('app', TType::STRUCT, 3);
            $xfer += $this->app->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->user !== null) {
            if (!is_object($this->user)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('user', TType::STRUCT, 4);
            $xfer += $this->user->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}