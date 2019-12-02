<?

namespace PhpTasks\Cars;

/**
 * Class Engine
 * @package PhpTasks\Cars
 */
final class Engine{
    /**
     * @var string
     */
    private $producer;
    /**
     * @var int
     */
    private $power;
    /**
     * @var int
     */
    private $createDate;
    /**
     * @var float
     */
    private $volume;

    /**
     * Engine constructor.
     * @param string $producer
     * @param int $power
     * @param float $volume
     */
    public function __construct($producer, $power, $volume)
    {
        $this->producer = $producer;
        $this->power = $power;
        $this->volume = $volume;
        $this->createDate = time();
    }

    /**
     * @return mixed
     */
    public function getVolume(){
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getPower(){
        return $this->power;
    }

    /**
     * @return int
     */
    public function getCreateDate(){
        return $this->createDate;
    }

    /**
     * @return mixed
     */
    public function getProducer(){
        return $this->producer;
    }


}