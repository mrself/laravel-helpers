<?php

function a($url) {
	return url('admin/' . $url);
}

function thisAction($action, $params = []) {
	$route = Route::current()->getAction()['controller'];
	$controller = "\\". explode('@', $route)[0];
	if (!$action) $action = 'index';
	return action($controller . '@' . $action, $params);
}

function asset1($asset) {
	return config('custom')['assetPath'] . '/' . $asset;
}
function uploadsDir($relativePath) {
	return '/uploads/' . $relativePath;
}
function dateFormat() {
	return config('custom')['dateFormat'];
}