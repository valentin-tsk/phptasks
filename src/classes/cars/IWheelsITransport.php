<?
namespace PhpTasks\Cars;

/**
 * Interface IWheelsITransport
 * @package PhpTasks\Cars
 */
interface IWheelsITransport extends ITransport {
    /**
     * @param string $wheelsType
     */
    public function setWheelsType($wheelsType);

    /**
     * @return string
     */
    public function getWheelsType();
}