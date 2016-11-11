<?php
	class Coffee
  {
		protected $roast;
    protected $caffine;
    protected $cost;

    public function __construct($r, $c, $m)
    {
      $this->roast = $r;
      $this->caffine = $c;
      $this->cost = $m;
    }

    public function __destruct()
    {
      echo "<div class=\"coffee-block\">I drank the " . get_class($this) . ".</div>";
    }

    public function __toString()
    {
      $ans = "I am a " . $this->roast . " roast cup of coffee.<br> I have a caffine content of "
      . $this->caffine . " mg.<br>I cost $" . $this->cost . "<br>";
      return $ans;
    }

    public function buzz()
    {
      if($this->caffine < 30 && $this->caffine > 0)
      {
        echo "Buzz: weak<br>";
      }
      else if($this->caffine > 30 && $this->caffine <= 90)
      {
        echo "Buzz: moderate<br>";
      }
      else
      {
        echo "Buzz: strong<br>";
      }
    }

    public function iced()
    {
      echo "I can be served iced!";
    }

	}
?>
