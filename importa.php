<!-- suppose this is farma.xml file -->
<!-- <?xml version="1.0"?>
<catalog>
<farma id="bk101">
  <author>Gambardella, Matthew</author>
  <title>XML Developer's Guide</title>
  <genre>Computer</genre>
  <price>44.95</price>
  <publish_date>2000-10-01</publish_date>
  <description>An in-depth look at creating applications
  with XML.</description>
   </farma>
   <farma id="bk102">
  <author>Ralls, Kim</author>
  <title>Midnight Rain</title>
  <genre>Fantasy</genre>
  <price>5.95</price>
  <publish_date>2000-12-16</publish_date>
  <description>A former architect battles corporate zombies,
  an evil sorceress, and her own childhood to become queen
  of the world.</description>
   </farma>
<catalog>
-->

<?php
// Loading the XML file
$xml = simplexml_load_file("farmadelivery.xml");
echo "<h2>".$xml->getName()."</h2><br />";
echo "<h2> </h2><br />";
 list($usec, $sec) = explode(" ", microtime());
 $script_start = (float) $sec + (float) $usec;
 

foreach($xml->children() as $farma)
{
    echo "farma : "				.$farma->attributes()->id."<br />";
    echo "oferta_id : "			.$farma->oferta_id." <br />";
    echo "oferta_descricao : "	.$farma->oferta_descricao." <br />";
    echo "empresa_id : "		.$farma->empresa_id." <br />";
    echo "oferta_valor : "		.$farma->oferta_valor." <br />";
    echo "link_produto : "		.$farma->link_produto." <br />";
    echo "oferta_imgproduto : "	.$farma->oferta_imgproduto." <br />";
	echo "oferta_principio_ativo : ".$farma->oferta_principio_ativo." <br />";
	echo "oferta_codigo_ms : "	.$farma->oferta_codigo_ms." <br />";
	echo "ean : "				.$farma->ean." <br />";
	
		
    echo "<hr/>";
	
}

 list($usec, $sec) = explode(" ", microtime());
 $script_end = (float) $sec + (float) $usec;
 $elapsed_time = round($script_end - $script_start, 5);
 echo $elapsed_time;
?>