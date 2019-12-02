<?

namespace PhpTasks\Cars;

use Couchbase\DateRangeSearchQuery;

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
        $this->createDate = date('Y-m-d H:i:s');
    }

    /**
     * @return float
     */
    public function getVolume(){
        return $this->volume;
    }

    /**
     * @return int
     */
    public function getPower(){
        return $this->power;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate(){
        return $this->createDate;
    }

    /**
     * @return string
     */
    public function getProducer(){
        return $this->producer;
    }


}