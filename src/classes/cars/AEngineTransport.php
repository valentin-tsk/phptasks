<?
namespace PhpTasks\Cars;


/**
 * Class AEngineTransport
 * @package PhpTasks\Cars
 */
abstract class AEngineTransport implements IGasolineConsumer
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
     * AEngineTransport constructor.
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
     * @param string $gasolineType
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