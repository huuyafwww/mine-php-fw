<?php

/**
 * Error Handler
 *
 * @param int $level
 * @param string $about
 * @param string $file
 * @param string $line
 */
function error_handler($level,$about,$file,$line){
    $error_level = constant("ERROR_LEVEL_".$level);
    ?>
    <div style="border:dotted 2px #000;padding:2%;">
        <h3 style="margin:0 0 .3em 0;text-align: center;color:red;">A PHP error has occurred.</h3>
        <table style="width:100%;border-collapse: collapse; border: solid 2px #ddd;border-radius: 4px;text-align: center;">
            <tbody>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">Severity</th>
                    <td><?php echo $error_level; ?></td>
                </tr>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">Message</th>
                    <td><?php echo $about; ?></td>
                </tr>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">File</th>
                    <td><?php echo $file; ?></td>
                </tr>
                <tr>
                    <th style="border-right: 2px solid #ddd;">Line Number</th>
                    <td><?php echo $line; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}