<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pipa Email Signatures</title>
  </head>
  <body>
    <?php
    $json = file_get_contents('data.json');
    $obj = json_decode( $json );
    //var_dump($obj);
    ?>
<style media="screen">
  span {
    color: #ccc;
  }
</style>
    <?php foreach($obj as $member): ?>
      <span style="display: block; margin: 20px 0;">copy from here</span>
     <div style="font-family:-apple-system, BlinkMacSystemFont, “Segoe UI”, Roboto, Helvetica, Arial, sans-serif;">
       <table border="0" cellspacing="0">
          <tr>
            <td style="padding-top: 5px;">
              <p style="color: #333333; margin: 0px; padding-bottom: 2px; font-size: 16px!important; font-weight: 700; font-weight: bold;">
                <?php if(!empty($member->linkedin)): ?>
                <a style="color: #333333; text-decoration: none;" href="<?php echo $member->linkedin;?>"><?php echo $member->name; ?></a>
              <?php else: ?>
                <?php echo $member->name; ?>
              <?php endif; ?>
              </p>
              <?php if(!empty($member->position)): ?><p style="margin: 0px; padding: 0; font-size: 14px; color: #6FD7E2;font-weight: 700; font-weight: bold;"><?php echo $member->position; ?></p><?php endif; ?>
              <?php if(!empty($member->mobile)): ?><p style="margin-bottom: 0;padding: 0; font-size: 14px; color: #333333;"><a style="color: #333333; text-decoration: none;" href="tel:+44<?php echo $member->mobile; ?>">+44
                <?php
                $data_zero = substr($member->mobile, 0, 1);
                $data_left = substr($member->mobile, 1, 4);
                $data_right = substr($member->mobile, 5, 9);
                echo '('.$data_zero.') '.$data_left.' '.$data_right;

                  ?>
              </a></p><?php endif; ?>
              <a href="https://www.pipa.ai" target="_blank"><img src="https://www.dropbox.com/s/cg9ejhw1xqid2md/pipalogo.png?dl=1" alt="pipa.ai" height="40" style="margin-top: 24px;"></a>
                <p style="font-size: 12px; color: #f5f5f5;">
                  <a href="https://www.facebook.com/askPiPA" target="_blank" style="color: #333333; text-decoration: none;">Facebook</a> |
                  <a href="https://twitter.com/PiPAsays" target="_blank" style="color: #333333; text-decoration: none;">Twitter</a> |
                  <a style="color: #f0626e; text-decoration: none; font-weight: bold;" href="https://www.pipa.ai" target="_blank">pipa.ai</a></p>
            </td>
          </tr>
       </table>
     </div>
      <span style="display: block; margin: 20px 0;">to here</span>
    <?php endforeach; ?>
  </body>
</html>
