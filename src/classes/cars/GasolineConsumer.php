<?

namespace PhpTasks\Cars;

/**
 * Interface GasolineConsumer
 * @package PhpTasks\Cars
 */
interface GasolineConsumer{
    /**
     * @param string $gasolineType
     * @return mixed
     */
    public function setGasolineType($gasolineType);

    /**
     * @return mixed
     */
    public function getGasolineType();
}