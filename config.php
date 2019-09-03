<?php

return array(
  'extension_name'         => 'Allopass_Hipay_Data',
  'summary'                => 'Official HiPay Fullservice Data payment extension.',
  'description'            => 'The HiPay Fullservice Data module for Magento 1 is a PHP module which allows you to add your own data to the DSP2 security requests that are made by the HiPay Fullservice module for Magento 1.',
  'notes'                  => 'Official HiPay Fullservice Data extension',
  'extension_version'      => '1.0.0',
  'skip_version_compare'   => false,
  'auto_detect_version'    => true,

  'stability'              => 'stable',
  'license'                => 'General Public License (GPL)',
  'channel'                => 'community',

  'author_name'            => 'HiPay',
  'author_user'            => 'HiPay',
  'author_email'           => 'support.tpp@hipay.com',

  'base_dir'               => __DIR__.'/dist',
  'archive_files'          => 'Allopass_Hipay_Data.tar',
  'path_output'            => __DIR__.'/dist',

  'php_min'                => '5.2.0',
  'php_max'                => '7.3.0',

  'extensions'             => array()
);
