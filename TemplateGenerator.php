<?php

/*
 * Html Template Generator
 * Sample From a Messanger Bot : Email Signature Generator
 * https://web.facebook.com/EmailSignatureGenerator/
*/

class TemplateGenerator
{
  protected $template ;
  protected $data ;

  function __construct($template,$data)
  {
    $this->template = $template;
    $this->data = $data;
  }

  public function Get()
  {
    # code...
    switch ($this->template) {
      case 'Theme 1':
      ?><?php ob_start(); ?>
      <table style=" border-width: 0px; border: 0px; padding: 0; margin: 0 auto; background: none; max-width: 500px;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
    <td>
      <table align="left" style="width: 30%; min-width: 150px;">
      <tbody><tr>
        <td style="padding: 16px;">
          <img src="<?php echo $this->data[10]; ?>" style="width:100%; border-radius: 100%;">
        </td>
      </tr>
    </tbody></table>
      <table align="left" style="width: 60%; min-width: 200px; border-left: 2px solid #333;">
      <tbody><tr>
          <td style="color: #333; font-size: 18px; font-family: Arial, Helvetica, sans-serif; padding: 16px 16px 8px 16px;"><?php echo $this->data[11]; ?><span style="color: #777; font-style: italic; border-left: 1px solid #555; margin-left: 8px; padding-left: 8px;"><?php echo $this->data[2]; ?></span>
          </td>
      </tr>
    </tbody></table>
  <table align="left" style="width: 60%; min-width: 200px; border-left: 2px solid #333;">
      <tbody><tr>
          <td style="color: #333; font-size: 16px; font-family: Arial, Helvetica, sans-serif; padding-left: 16px;"><?php echo $this->data[6]; ?>
          </td>
      </tr>
  </tbody></table>

  <table align="left" style="width: 60%; min-width: 200px; border-left: 2px solid #333;">
      <tbody><tr>
               <td style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding-left: 16px;"><span style="margin-right: 8px; color: #777;">phone:</span><?php echo $this->data[9]; ?>
          </td>
         <?php if ($this->data[12] !=="#") { ?>
            <td style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding-left: 16px;"><span style="margin-right: 8px; color: #777;">work:</span><?php echo $this->data[12]; ?>
             </td>
         <?php } ?>
      </tr>
  </tbody></table>

  <table align="left" style="width: 60%; min-width: 200px; border-left: 2px solid #333;">
      <tbody><tr>
          <td style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding-left: 16px;"><span style="margin-right: 8px; color: #777;">email:</span><?php echo $this->data[8]; ?>
          </td>
      </tr>
  </tbody></table>

  <table align="left" style="width: 60%; min-width: 200px; border-left: 2px solid #333;">
      <tbody><tr>
          <td style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding-left: 16px;"><span style="margin-right: 8px; color: #777;">website:</span><a href="<?php echo $this->data[7]; ?>" style="color: #333; text-decoration: non"><?php echo $this->data[7]; ?></a>
          </td>
      </tr>
  </tbody></table>

  <table align="left" style="width: 60%; min-width: 200px; padding-top: 8px; border-left: 2px solid #333;">
      <tbody><tr>
          <td style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding-left: 16px;">
              <p style="font-size: 0px; line-height: 0; font-family: Helvetica, Arial, sans-serif;">
              <?php if ($this->data[4] !=="#") { ?>
                  <a style="text-decoration: none; display: inline; margin-right: 8px;" href="<?php echo $this->data[4]; ?>">
                      <img width="24" style="margin-bottom:2px; border:none; display:inline;" height="24" src="twitter.png" alt="Twitter">
                  </a>
                <?php } ?>
                  <a style="text-decoration: none; display: inline; margin-right: 8px;" href="<?php echo $this->data[3]; ?>">
                      <img width="24" style="margin-bottom:2px; border:none; display:inline;" height="24" src="facebook.png" alt="Facebook">
                  </a>
              <?php if ($this->data[5] !=="#") { ?>
                  <a style="text-decoration: none; display: inline; margin-right: 8px;" href="<?php echo $this->data[5]; ?>">
                      <img width="24" style="margin-bottom:2px; border:none; display:inline;" height="24" src="linkedin.png" alt="LinkedIn">
                  </a>
             <?php } ?>
              </p>
          </td>
      </tr>
  </tbody></table>

  </td>

</tr>
</tbody></table>
<?php $theme = ob_get_clean();


          break;
  
    }
    return $theme;
  }

  public function file($file)
  {
    # code...
    $code = $this->Get();
    if (!empty($code)) {
        # code...
        $myfile = fopen($file, "a") or die("Unable to open file!");
        fwrite($myfile, $code);
        fclose($myfile);
    }

  }
}



?>
