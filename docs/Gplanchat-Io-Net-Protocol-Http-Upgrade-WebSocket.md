Namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`
==========



#### Classes

### Class `Request`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-request)



#### Implemented Interfaces

* `Iterator`
* `Traversable`
* `Countable`
* `ArrayAccess`
* `Serializable`


### Constant `IT_MODE_LIFO`

*Value* : `2`



### Constant `IT_MODE_FIFO`

*Value* : `0`



### Constant `IT_MODE_DELETE`

*Value* : `1`



### Constant `IT_MODE_KEEP`

*Value* : `0`





### Class `RequestFactory`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-requestfactory)



#### Method `__invoke`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestFactory
* *is nullable* : No


Parameter `moreParams`



* *type* : array
* *is nullable* : No
* *default value* : `array (
)`





### Class `RequestHandler`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-requesthandler)



#### Implemented Interfaces

* `Gplanchat\Io\Net\Protocol\RequestHandlerInterface`
* `Gplanchat\EventManager\EventEmitterInterface`
* `Gplanchat\Io\Net\Protocol\Http\Upgrade\ProtocolUpgradeAwareInterface`
* `Gplanchat\ServiceManager\ServiceManagerAwareInterface`
* `Gplanchat\Log\LoggerAwareInterface`
* `Psr\Log\LoggerAwareInterface`


#### Used Traits

* `Gplanchat\ServiceManager\ServiceManagerAwareTrait`
* `Gplanchat\EventManager\EventEmitterTrait`
* `Gplanchat\Log\LoggerAwareTrait`


### Constant `SECURITY_GUID`

*Value* : `'258EAFA5-E914-47DA-95CA-C5AB0DC85B11'`



### Constant `DEFAULT_PRIORITY`

*Value* : `1`





#### Method `__construct`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No




#### Method `__invoke`

Parameter `event`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No


Parameter `client`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No


Parameter `input`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `length`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `isError`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes




#### Method `setCallbackHandler`

Parameter `callbackHandler`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No




#### Method `getCallbackHandler`

#### Method `upgrade`

Parameter `client`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No


Parameter `request`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No


Parameter `response`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No




#### Method `_parseInt`

Parameter `offset`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `length`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes




#### Method `on`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `listener`



* *type* : callable
* *is nullable* : No


Parameter `priority`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes
* *default value* : `NULL`



#### Method `once`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `listener`



* *type* : callable
* *is nullable* : No


Parameter `priority`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes
* *default value* : `NULL`



#### Method `removeListener`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `callbackHandler`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No




#### Method `removeAllListeners`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes




#### Method `getListeners`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes




#### Method `emit`

Parameter `event`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No


Parameter `params`



* *type* : array
* *is nullable* : No
* *default value* : `array (
)`



#### Method `getServiceManager`

#### Method `setServiceManager`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No




#### Method `getLogger`

#### Method `setLogger`

Parameter `logger`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : No




#### Method `_registerEvent`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `listener`



* *type* : callable
* *is nullable* : No


Parameter `priority`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes


Parameter `isCalledOnce`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandler
* *is nullable* : Yes
* *default value* : `false`





### Class `RequestHandlerFactory`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-requesthandlerfactory)



#### Implemented Interfaces

* `Gplanchat\ServiceManager\ServiceManagerAwareInterface`


#### Used Traits

* `Gplanchat\ServiceManager\ServiceManagerAwareTrait`


#### Method `__construct`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandlerFactory
* *is nullable* : No


Parameter `callback`



* *type* : callable
* *is nullable* : Yes
* *default value* : `NULL`



#### Method `__invoke`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandlerFactory
* *is nullable* : No


Parameter `moreParams`



* *type* : array
* *is nullable* : No
* *default value* : `array (
)`



#### Method `setCallback`

Parameter `callback`



* *type* : callable
* *is nullable* : No




#### Method `getCallback`

#### Method `getServiceManager`

#### Method `setServiceManager`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\RequestHandlerFactory
* *is nullable* : No






### Class `Response`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-response)



#### Implemented Interfaces

* `Iterator`
* `Traversable`
* `Countable`
* `ArrayAccess`
* `Serializable`
* `Gplanchat\EventManager\EventEmitterInterface`


#### Used Traits

* `Gplanchat\EventManager\EventEmitterTrait`


### Constant `IT_MODE_LIFO`

*Value* : `2`



### Constant `IT_MODE_FIFO`

*Value* : `0`



### Constant `IT_MODE_DELETE`

*Value* : `1`



### Constant `IT_MODE_KEEP`

*Value* : `0`



### Constant `DEFAULT_PRIORITY`

*Value* : `1`





#### Method `send`

Parameter `client`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : No




#### Method `addMessage`

Parameter `message`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes




#### Method `on`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes


Parameter `listener`



* *type* : callable
* *is nullable* : No


Parameter `priority`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes
* *default value* : `NULL`



#### Method `once`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes


Parameter `listener`



* *type* : callable
* *is nullable* : No


Parameter `priority`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes
* *default value* : `NULL`



#### Method `removeListener`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes


Parameter `callbackHandler`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : No




#### Method `removeAllListeners`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes




#### Method `getListeners`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes




#### Method `emit`

Parameter `event`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : No


Parameter `params`



* *type* : array
* *is nullable* : No
* *default value* : `array (
)`



#### Method `_registerEvent`

Parameter `eventNameList`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes


Parameter `listener`



* *type* : callable
* *is nullable* : No


Parameter `priority`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes


Parameter `isCalledOnce`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\Response
* *is nullable* : Yes
* *default value* : `false`





### Class `ResponseFactory`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-responsefactory)



#### Method `__invoke`

Parameter `serviceManager`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\ResponseFactory
* *is nullable* : No


Parameter `moreParams`



* *type* : array
* *is nullable* : No
* *default value* : `array (
)`





### Class `ServerServiceManager`

_Declared in namespace `Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket`_ [Read the docs](Gplanchat-Io-Net-Protocol-Http-Upgrade-WebSocket.md#class-serverservicemanager)



#### Implemented Interfaces

* `Gplanchat\ServiceManager\ServiceManagerInterface`


#### Method `__construct`

Parameter `config`



* *type* : array
* *is nullable* : Yes
* *default value* : `NULL`

Parameter `configurator`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\ServerServiceManager
* *is nullable* : Yes
* *default value* : `NULL`

Parameter `logger`



* *type* : Gplanchat\Io\Net\Protocol\Http\Upgrade\WebSocket\ServerServiceManager
* *is nullable* : Yes
* *default value* : `NULL`






