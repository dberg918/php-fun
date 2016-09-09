<?php
class ChurchEntry
{
    public $churchname, $denomination, $prefecture, $city, $gmap, $website,
           $servday, $servtime;

    public function displayName()
    {
        print $this->churchname;
    }
    public function displayChurch()
    {
        print  '<div class="church-wrapper">
                <div class="church-profile">
                <h1><a href="' . $this->website . '">' . $this->churchname . '</a></h1>
                <h2>' . $this->denomination . '</h2>
                <p class="church-loc">
                    <a href="' . $this->gmap . '">' . $this->city . ', ' . $this->prefecture . '</a>
                </p>
                <p class="church-serv">
                    Services: ' . $this->servday . ' at ' . $this->servtime . '
                </p>
                </div>
                </div>

                ';
    }
}
?>

