--TEST--
Get acls before connecting
--SKIPIF--
<?php if (!extension_loaded("libzookeeper")) print "skip"; ?>
--FILE--
<?php
$zc = new ZookeeperClient();
try {
    $zc->getAcls('/zookeeper');
} catch (ZookeeperClientException $zce) {
    fprintf(STDOUT, "[#%d] %s\n", $zce->getCode(), $zce->getMessage());
}
?>
--EXPECT--
[#2] Method 'connect' should be called before 'getAcls'