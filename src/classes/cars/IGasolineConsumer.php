<?

namespace PhpTasks\Cars;

/**
 * Interface IGasolineConsumer
 * @package PhpTasks\Cars
 */
interface IGasolineConsumer{
    /**
     * @param string $gasolineType
     * @return string
     */
    public function setGasolineType($gasolineType);

    /**
     * @return string
     */
    public function getGasolineType();
}