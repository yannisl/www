<?php
$Path['lib'] = './../lib/';
require_once $Path['lib'] . 'lib_bibtex.inc.php';

$Site = array();
$Site['bibtex'] = new Bibtex('references.bib');
$bb = $Site['bibtex'];
// set the style you want 
//abbrv

$bb->SetBibliographyStyle('natbib');
//$bb->SetBibliographyStyle('abbrv');
?>
This and that has <?php cite('spinks60')?>'long been known to be such and so <?php citep('spinks60', 'siebes06', 
       'DBLP:journals/tkde/MiettinenMGDM08');?>. Furthermore, <?php citet('agrawal93')?> 
       clearly did not <?php cite($bb, 'agrawal93')?>.
       
<?php 
      
      $bb->PrintBibliography(); 
      $bb->PrintBibliographyCitedOnly();
      $bb->PrintBibliographySelectedOnly();
?>




