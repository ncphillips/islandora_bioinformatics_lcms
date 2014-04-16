<?php
/*
  Template file for lcms object page.

  Honestly not sure what's going on here, basically just copying from specimen...

  What will we do with the raw, we probably don't want to display it by any means.
*/

$islandora_content = $islandora_object['LCMS']->content;
$path = drupal_get_path('module', 'islandora_lab_object_lcms');

echo "<pre>";
var_dump($variables["LCMS_DATA"]);
echo "</pre>";
?>

<div class="islandora-lcms-object islandora">
  <div class ="lcms_data">
    <table>
      <tr>
        <td>Run Title</td>
        <td><?php echo $variables["LCMS_DATA"]["run_title"] ?></td>
      </tr>
      <tr>
        <td>Sequence Name</td>
        <td><?php echo $variables["LCMS_DATA"]["seq_name"] ?></td>
      </tr>
      <tr>
        <td>User</td>
        <td><?php echo $variables["LCMS_DATA"]["user_select"] ?></td>
      </tr>
      <tr>
        <td>Solvent / Concentration</td>
        <td>
          <?php

            // apparently it doesnt make sense that they'd select more than one of these.
            // but the form isnt currently set up to support that. So I'm not going to check

            if ($variables['LCMS_DATA']['meoh_solv'] == "1") {
              echo "Methanol ";
            }

          if ($variables['LCMS_DATA']['acetonitrile_solv'] == "1") {
            echo "Acetonitrile ";
          }

          if ($variables['LCMS_DATA']['other_solv'] == "1") {
            echo $variables['LCMS_DATA']['other_conc_solv'] . " ";
          }

          if ($variables['LCMS_DATA']['conc_100'] == "1") {
            echo "100 ug/ml";
          }

          if ($variables['LCMS_DATA']['conc_500'] == "1") {
            echo "500 ug/ml";
          }

          if ($variables['LCMS_DATA']['conc_other'] == "1") {
            // not sure what to do here.
          }

          ?>
        </td>
        <tr>
      </tr>
      <tr>
        <td>Sample Origin</td>
        <td><?php echo $variables['LCMS_DATA']['samp_ori']; ?></td>
      </tr>
      <tr>
        <td>Other Protocol</td>
        <td><?php echo $variables['LCMS_DATA']['other_protocol'] ?> </td>
      </tr>
      <tr>
        <td>Sample Introduction</td>
        <td><?php echo $variables['LCMS_DATA']['samp_intro'] ?></td>
      </tr>
      <tr>
        <td>Detection / Ionization</td>
        <td>
          <?php

            if ($variables['LCMS_DATA']['esi_neg']  == "1") { echo "ESI (Neg) "; }
            if ($variables['LCMS_DATA']['esi_pos']  == "1") { echo "ESI (Pos) "; }
            if ($variables['LCMS_DATA']['apci_neg'] == "1") { echo "APCI (Neg) "; }
            if ($variables['LCMS_DATA']['apci_pos'] == "1") { echo "APCI (Pos) ";}
            if ($variables['LCMS_DATA']['pda']      == "1") { echo "PDA "; }
            if ($variables['LCMS_DATA']['elsd']     == "1") { echo "ELSD "; }
            if ($variables['LCMS_DATA']['ei']       == "1") { echo "EI "; }

          ?>
        </td>
      </tr>
      <tr>
        <td>Mass Range</td>
        <td><?php echo $variables['LCMS_DATA']['mass_range']; ?></td>
      </tr>
      <tr>
        <td>LC Solvent System</td>
        <td><?php echo $variables['LCMS_DATA']['lc_solvent_sys']; ?></td>
      </tr>

      <tr>
        <td>Types of Analysis</td>
        <td><?php echo $variables['LCMS_DATA']['types_of_analysis']; ?></td>
      </tr>
    </table>
  </div>
</div>
