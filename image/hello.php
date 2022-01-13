<?php

$name           = (isset($_ENV['MY_POD_NAME'])) ? $_ENV['MY_POD_NAME'] : 'MY_POD_NAME';
$namespace      = (isset($_ENV['MY_POD_NAMESPACE'])) ? $_ENV['MY_POD_NAMESPACE'] : 'MY_POD_NAMESPACE';
$ip             = (isset($_ENV['MY_POD_IP'])) ? $_ENV['MY_POD_IP'] : 'MY_POD_IP';
$node           = (isset($_ENV['MY_NODE_NAME'])) ? $_ENV['MY_NODE_NAME'] : 'MY_NODE_NAME';
$serviceaccount = (isset($_ENV['MY_POD_SERVICE_ACCOUNT'])) ? $_ENV['MY_POD_SERVICE_ACCOUNT'] : 'MY_POD_SERVICE_ACCOUNT';

if (isset($_REQUEST['phpinfo'])) {
  phpinfo();
  exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
      <title>Hello from OpenShift</title>
      <style type="text/css">
        h1 {
          font-size: 48px;
        }
        span {
          color: red;
        }
        p {
          font-size: 24px;
        }
      </style>
    </head>
    <body>
      <h1>Hello from <span style='last-world'>OpenShift!</span></h1>
      <p>This is a demo website hosted on Pod <?php echo $name; ?> in Namespace <?php echo $namespace; ?> (<?php echo $ip; ?>)</p>
      <p>We are running on <?php echo $node; ?> with the service account <?php echo $serviceaccount; ?></p>
    </body>
</html>
