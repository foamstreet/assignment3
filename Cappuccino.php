<?php
	class Cappuccino extends Coffee
  {
    private $foam;
    private $art;

    public function __construct($r, $c, $m, $f, $a)
    {
      parent::__construct($r, $c, $m);
      $this->foam = $f;
      $this->art = $a;
    }

    public function __toString()
    {
      $ans = "I am a " . $this->roast . " roast cappuccino.<br>I have a caffine content of "
      . $this->caffine . " mg.<br>I have a foam level of "  .$this->foam . ".<br>I cost $"
      . $this->cost . "<br>";
      return $ans;
    }

    public function iced()
    {
      echo "I am not served iced.";
    }

    public function getArt()
    {
      return $this->art;
    }

  }
?>
