<?php
//
// Essential configuration

define('APP_ENV',               isset($_SERVER['APP_ENV']) ? $_SERVER['APP_ENV'] : 'development');

define('APP_ROOT',              realpath(dirname(__FILE__) . '/../..'));
define('OFFSITE_ROOT',          APP_ROOT . '/_offsite');
define('ENVIRONMENT_ROOT',      OFFSITE_ROOT . '/environment');
define('INCLUDE_ROOT',          OFFSITE_ROOT . '/include');
define('LIB_ROOT',              INCLUDE_ROOT . '/lib');

define('TPL_DIR',               'tpl');
define('TPL_ROOT',              OFFSITE_ROOT . '/' . TPL_DIR);

define('STATIC_ROOT',           APP_ROOT . '/static');
define('STATIC_URL',            '/static/');

set_include_path('.:' . LIB_ROOT);

//
// Core functions

require 'base-jump/common.php';

function env($file) {
    require ENVIRONMENT_ROOT . '/' . APP_ENV . '/' . $file . '.php';
}

//
// Autoloader gubbins; this is mostly autogenerated, see the Rakefile for details

function class_map_autoloader($class) {
    
    // START-MAP
    static $map = array (
      'Annotation' => 'base-php/Annotation.php',
      'Arrays' => 'base-php/Arrays.php',
      'Base' => 'base-php/Base.php',
      'Callback' => 'base-php/Callback.php',
      'FunctionCallback' => 'base-php/Callback.php',
      'InstanceCallback' => 'base-php/Callback.php',
      'StaticCallback' => 'base-php/Callback.php',
      'Component' => 'base-php/Component.php',
      'Event' => 'base-php/Component.php',
      'Component_Extension' => 'base-php/Component.php',
      'Date' => 'base-php/Date.php',
      'Errors' => 'base-php/Errors.php',
      'File' => 'base-php/File.php',
      'GDB_Exception' => 'base-php/GDB.php',
      'GDB_RollbackException' => 'base-php/GDB.php',
      'GDB_QueryException' => 'base-php/GDB.php',
      'GDB_IntegrityConstraintViolation' => 'base-php/GDB.php',
      'GDB_ForeignKeyViolation' => 'base-php/GDB.php',
      'GDB_UniqueViolation' => 'base-php/GDB.php',
      'GDB_CheckViolation' => 'base-php/GDB.php',
      'GDB' => 'base-php/GDB.php',
      'GDBMySQL' => 'base-php/GDB.php',
      'GDBResult' => 'base-php/GDB.php',
      'GDBResultMySQL' => 'base-php/GDB.php',
      'H' => 'base-php/H.php',
      'H_Table' => 'base-php/H.php',
      'Error_UnsupportedImageType' => 'base-php/Image.php',
      'Image' => 'base-php/Image.php',
      'Inflector' => 'base-php/Inflector.php',
      'Validatable' => 'base-php/Interfaces.php',
      'MIME' => 'base-php/MIME.php',
      'Money_ConversionError' => 'base-php/Money.php',
      'Money' => 'base-php/Money.php',
      'Money_Bank' => 'base-php/Money.php',
      'HTTP_Request' => 'base-php/Request.php',
      'Template' => 'base-php/Template.php',
      'V' => 'base-php/V.php',
      'XML_RPC' => 'base-php/XML/RPC.php',
      'XML_RPC_Request' => 'base-php/XML/RPC.php',
      'XML_RPC_Response' => 'base-php/XML/RPC.php',
      'Error_AssertionFailed' => 'base-php/Test/Base.php',
      'Test_Base' => 'base-php/Test/Base.php',
      'Test_ConsoleReporter' => 'base-php/Test/ConsoleReporter.php',
      'Test_Invoker' => 'base-php/Test/Invoker.php',
      'Test_MethodInvoker' => 'base-php/Test/MethodInvoker.php',
      'Test_Reporter' => 'base-php/Test/Reporter.php',
      'Test_Suite' => 'base-php/Test/Suite.php',
      'Test_Unit' => 'base-php/Test/Unit.php',
      'Model_StateError' => 'base-php/Model/Base.php',
      'Model_NoSuchAttributeError' => 'base-php/Model/Base.php',
      'Model_Base' => 'base-php/Model/Base.php',
      'Model_Association' => 'base-php/Model/Base.php',
      'Model_Association_HasOne' => 'base-php/Model/Base.php',
      'Model_Association_HasMany' => 'base-php/Model/Base.php',
      'Model_Association_BelongsTo' => 'base-php/Model/Base.php',
      'ISO_Country' => 'base-php/ISO/Country.php',
      'ISO_Language' => 'base-php/ISO/Language.php',
      'GDB_SQL' => 'base-php/GDB/SQL.php',
      'File_Upload' => 'base-php/File/Upload.php',
      'Error_IllegalArgument' => 'base-php/Error/IllegalArgument.php',
      'Error_IllegalState' => 'base-php/Error/IllegalState.php',
      'Error_IO' => 'base-php/Error/IO.php',
      'Error_MethodMissing' => 'base-php/Error/MethodMissing.php',
      'Error_NoSuchElement' => 'base-php/Error/NoSuchElement.php',
      'Error_NotFound' => 'base-php/Error/NotFound.php',
      'Error_OutOfBounds' => 'base-php/Error/OutOfBounds.php',
      'Error_Syntax' => 'base-php/Error/Syntax.php',
      'Error_UnsupportedOperation' => 'base-php/Error/UnsupportedOperation.php',
      'Date_Interval' => 'base-php/Date/Interval.php',
      'Date_Range' => 'base-php/Date/Range.php',
      'Date_Time' => 'base-php/Date/Time.php',
      'Contact_Form' => 'base-php/Contact/Form.php',
      'Contact_Form_Field' => 'base-php/Contact/Form.php',
      'Contact_Form_Text' => 'base-php/Contact/Form.php',
      'Contact_Form_Textarea' => 'base-php/Contact/Form.php',
      'Contact_Form_Select' => 'base-php/Contact/Form.php',
      'Contact_Form_Date' => 'base-php/Contact/Form.php',
      'Contact_Form_Time' => 'base-php/Contact/Form.php',
      'Contact_Form_Checkbox' => 'base-php/Contact/Form.php',
      'Contact_Form_File' => 'base-php/Contact/Form.php',
      'Contact_Mailer' => 'base-php/Contact/Form.php',
      'Contact_CSV' => 'base-php/Contact/Form.php',
      'BaseJump::Template' => 'base-jump/classes/Template.php',
    );
    // END-MAP

    if (isset($map[$class])) require $map[$class];

}

spl_autoload_register('class_map_autoloader');

//
// Setup environment, globals and other dependencies

env('main');

$tpl        = new BaseJump::Template;
$request    = new HTTP_Request;

//
// Load per-dir configuration if it exists

if (file_exists('_dir.php')) require '_dir.php';
?>