<?php 
## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
// Ogni punto un nuovo paragrafo.

$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada leo nisi, et mattis urna lacinia sed. Donec finibus eros at eros mattis, non cursus nulla maximus. Quisque volutpat, tortor auctor volutpat interdum, arcu risus sodales velit, ac vulputate felis massa in turpis. Aenean vel mattis nisi. Donec semper neque a laoreet bibendum. Proin iaculis lacus ac facilisis sodales. Nunc pharetra euismod turpis, ut tempor tortor faucibus eu. Proin sodales sem commodo, bibendum magna a, consectetur purus. Phasellus sollicitudin vestibulum faucibus. Sed dignissim magna at tortor vestibulum, vitae venenatis diam porta. Suspendisse in finibus enim. Maecenas ac tincidunt metus. Nulla fringilla mi ut fringilla pretium. Cras sem lacus, imperdiet sed est a, interdum sodales elit. Vestibulum pellentesque est est, eu suscipit magna ultricies sed. Nunc vehicula odio mi, ac pretium mi malesuada vitae.';

$newPar = explode('.', $paragraph); 
var_dump($newPar);
?>