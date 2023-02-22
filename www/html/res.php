<?php
$data = $_POST["data"];
$result = preg_match('/.*<script>*/', $data);
if($data == '/.*<script>*/' || $data == 'alert'){
	echo 'aaaaa';
}
else {
	echo 'not found';
}
