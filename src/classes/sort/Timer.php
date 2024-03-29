<?

namespace PhpTasks\Sort;

/**
 * Class Timer
 * @package PhpTasks\Sort
 */
class Timer
{

    /**
     * @var int
     */
    private $currentTime;

    /**
     * Timer constructor.
     */
    public function __construct()
    {
        $this->currentTime = 0;
    }

    /**
     * @return void
     */
    public function startCount()
    {
        $this->currentTime = microtime(true);
    }

    /**
     * @return int
     */
    public function getTime()
    {
        $rawTime = microtime(true) - $this->currentTime;
        $milliseconds = number_format($rawTime, 6);
        return $milliseconds;
    }
}