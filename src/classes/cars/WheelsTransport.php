<?
namespace PhpTasks\Cars;

/**
 * Interface WheelsTransport
 * @package PhpTasks\Cars
 */
interface WheelsTransport extends Transport {
    /**
     * @param string $wheelsType
     * @return mixed
     */
    public function setWheelsType($wheelsType);

    /**
     * @return mixed
     */
    public function getWheelsType();
}