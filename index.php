<?php
// classe prodotto
class Prodotto
{
    public $nome;
    public $marca;
    public $prezzo;
    public $descrizione;
    protected $inStock;

    // construct
    public function __construct($_nome, $_marca, $_prezzo, $_descrizione, $_inStock)
    {
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->setStock($_inStock);
    }

    //metodi
    public function setStock($_inStock)
    {
        $this->inStock = $_inStock;
    }

    public function getStock()
    {
        return $this->inStock;
    }
}

// classe abbigliamento di prodotto
class Abbigliamento extends Prodotto
{
    public $taglia;
    public $colore;
    public $materiale;


    public function __construct($_nome, $_marca, $_prezzo, $_descrizione, $_inStock, $_taglia, $_colore, $_materiale)
    {
        parent::__construct($_nome, $_marca, $_prezzo, $_descrizione, $_inStock);
        $this->taglia = $_taglia;
        $this->colore = $_colore;
        $this->materiale = $_materiale;
    }
}


$maglietta = new Abbigliamento("Perfect Tee", "Levi's", 20, "Un morbido girocollo classico che si abbina con tutto", true, "M", "nero", "cotone");



var_dump($maglietta);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>

<body>
    // maglietta
    <h2><?php echo $maglietta->nome; ?></h2>
    <h3><?php echo $maglietta->marca; ?></h3>
    <h4>Prezzo: <?php echo $maglietta->prezzo; ?> euro</h4>
    <p>Descrizione: <?php echo $maglietta->descrizione; ?></p>
    <p>Colore: <?php echo $maglietta->colore; ?></p>
    <p>Taglia: <?php echo $maglietta->taglia; ?></p>
    <p>100% <?php echo $maglietta->materiale; ?></p>
    <p>La maglietta al momento <?php echo ($maglietta->getStock() == true ? 'è' : 'non è' ); ?> disponibile!</p>

</body>

</html>