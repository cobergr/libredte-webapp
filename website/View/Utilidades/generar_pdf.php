<h1>Generar PDF a partir de XML EnvioDTE</h1>
<?php
$f = new \sowerphp\general\View_Helper_Form();
echo $f->begin(['onsubmit'=>'Form.check()']);
echo $f->input([
    'type' => 'file',
    'name' => 'xml',
    'label' => 'XML EnvioDTE',
    'help' => 'Archivo XML de EnvioDTE',
    'check' => 'notempty',
    'attr' => 'accept=".xml"',
]);
echo $f->input([
    'type' => 'file',
    'name' => 'logo',
    'label' => 'Logo PNG',
    'help' => 'Logo del emisor en formato PNG',
    'attr' => 'accept=".png"',
]);
echo $f->input([
    'type' => 'checkbox',
    'name' => 'cedible',
    'label' => '¿Cedible?',
    'help' => 'Si se selecciona, se generará adicionalmente versión del documento con leyenda: CEDIBLE',
]);
echo $f->input([
    'type' => 'radios',
    'name' => 'papelContinuo',
    'label' => 'Tipo papel',
    'options' => [0=>'Hoja carta', 74=>'Papel contínuo 74mm'],
    'checked' => isset($_POST['papelContinuo']) ? $_POST['papelContinuo'] : 0,
]);
echo $f->input([
    'name' => 'webVerificacion',
    'label' => 'Web verificación',
    'value' => 'www.sii.cl',
    'help' => 'Web para verificación de documento. Si es boleta es obligatorio asignar la web real de verificación aquí',
]);
echo $f->end('Generar documento en PDF');
