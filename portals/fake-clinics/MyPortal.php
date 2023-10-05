<?php namespace evilportal;

class MyPortal extends Portal {
  public function handleAuthorization() {
    parent::handleAuthorization();
  }

  public function onSuccess() {
    parent::onSuccess();
  }

  public function showError() {
    parent::showError();
  }
}
