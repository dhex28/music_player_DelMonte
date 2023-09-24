<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MusicController::index');
$routes->post('music/createPlaylist', 'MusicController::createPlaylist');
$routes->post('music/upload', 'MusicController::uploadMusic');
$routes->post('music/getPlaylistMusic', 'MusicController::getPlaylistMusic'); // Add this route for getting playlist music
$routes->post('music/addToPlaylist', 'MusicController::addToPlaylist'); // Add this route for adding music to a playlist
$routes->post('music/getPlaylistMusic', 'MusicController::getPlaylistMusic');



