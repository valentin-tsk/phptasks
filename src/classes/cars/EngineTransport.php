<?
namespace PhpTasks\Cars;


/**
 * Class EngineTransport
 * @package PhpTasks\Cars
 */
abstract class EngineTransport implements GasolineConsumer
{
    /**
     * @var Engine
     */
    private $engine;
    /**
     * @var string
     */
    private $gasolineType;

    /**
     * EngineTransport constructor.
     * @param Engine $engine
     * @param $gasolineType
     */
    public function __construct(Engine $engine, $gasolineType)
    {
        $this->engine = $engine;
        $this->setGasolineType($gasolineType);
    }

    /**
     * @return Engine
     */
    public function getEngine(){
        return $this->engine;
    }

    /**
     * @param mixed $gasolineType
     */
    public function setGasolineType($gasolineType)
    {
        $this->gasolineType = $gasolineType;
    }

    /**
     * @return string
     */
    public function getGasolineType()
    {
        return $this->gasolineType;
    }


}