# PSR-11 Autowiring Declaration
This package contains some interfaces to extends the [PSR-11 Container definition](https://www.php-fig.org/psr/psr-11/) with auto-wiring hints based on interfaces.

The goal is, to describe classes for a container implementations by interfaces and not via configuration files.

## Installation
Install this package using composer:

```
composer require labor-digital/container-autowiring-declaration
```

## Interfaces
```Namespace: Neunerlei\ContainerAutoWiringDeclaration```

### SingletonInterface
Any class that implements this interface MUST be handled as singleton,
this means that every time it is requested from the container, the same instance will be returned.

### InjectableInterface
Every class that implements this interface MUST be scanned by the auto-wirer.
 * All public methods that start with "inject" MUST automatically be wired as setters of additional dependencies.
 * An inject method CAN either have a single or multiple properties to be injected.
 * If an inject method does not have any properties it MUST be skipped without errors.

### AutoWiringExceptionInterface
Any auto-wiring related exception MUST implement this interface

## Definition Interfaces
```Namespace: Neunerlei\ContainerAutoWiringDeclaration\Definition```

This section is a secondary definition which defines an interchange format of auto-wiring configuration definitions.
Using these interfaces you are able to create a universal auto-wiring handler.

### AutoWiringDefinitionProviderInterface
The main repository that creates and stores auto wiring definitions for the classes of you application.
The auto-wirer MUST get it's definitions using the definition provider.

```php
namespace Neunerlei\ContainerAutoWiringDeclaration\Definition;
interface AutoWiringDefinitionProviderInterface {
	
	/**
	 * Adds a new auto wiring definition to the list of registered definitions.
	 *
	 * @param AutoWiringClassInterface $definition
	 *
	 * @return $this
	 */
	public function setAutoWiringDefinition(AutoWiringClassInterface $definition);
	
	/**
	 * Returns a auto wiring definition object for the given class name.
	 *
	 * @param string $className The name of the class to get the definition object for
	 *
	 * @return AutoWiringClassInterface
	 */
	public function getAutoWiringDefinition(string $className): AutoWiringClassInterface;
	
}
```

### AutoWiringClassInterface
Describes the auto wiring definition of a single class.

```php
namespace Neunerlei\ContainerAutoWiringDeclaration\Definition;
interface AutoWiringClassInterface {
	
	/**
	 * Returns the name of the class described in this definition instance
	 * @return string
	 */
	public function getName(): string;
	
	/**
	 * Returns true if the class should be handled as singleton. Meaning the container should always
	 * return he same instance after it was created once.
	 * @return bool
	 */
	public function isSingleton(): bool;
	
	/**
	 * Returns the list of constructor parameters
	 * @return AutoWiringParameterInterface[]
	 */
	public function getConstructorParams(): array;
	
	/**
	 * Returns the list of inject methods of this class.
	 * This MUST return an empty array if the class does not implement the Injectable interface
	 * @return AutoWiringMethodInterface[]
	 * @see \Neunerlei\ContainerAutoWiringDeclaration\InjectableInterface
	 */
	public function getInjectMethods(): array;

}
```

### AutoWiringMethodInterface
Describes the auto wiring definition of a single method inside a class.

```php
namespace Neunerlei\ContainerAutoWiringDeclaration\Definition;
interface AutoWiringMethodInterface {
	
	/**
	 * Returns the auto-wiring class definition
	 * @return \Neunerlei\ContainerAutoWiringDeclaration\Definition\AutoWiringClassInterface
	 */
	public function getClass(): AutoWiringClassInterface;
	
	/**
	 * Returns the name of the method
	 *
	 * @return string
	 */
	public function getName(): string;
	
	/**
	 * Returns the list of parameters that should be set for this method.
	 *
	 * @return AutoWiringParameterInterface[]
	 */
	public function getParameters(): array;
}
```
### AutoWiringParameterInterface
Describes the auto wiring definition of a single parameter of a method inside a class.

```php
namespace Neunerlei\ContainerAutoWiringDeclaration\Definition;
interface AutoWiringParameterInterface {
	
	/**
	 * Returns the auto-wiring method definition
	 * @return \Neunerlei\ContainerAutoWiringDeclaration\Definition\AutoWiringMethodInterface
	 */
	public function getMethod(): AutoWiringMethodInterface;
	
	/**
	 * Returns the name of the parameter
	 *
	 * @return string
	 */
	public function getName(): string;
	
	/**
	 * Returns true if the parameter has a defined type class that can be instantiated
	 * @return bool
	 */
	public function hasType(): bool;
	
	/**
	 * Returns the type of the parameter as a string or null if there is none
	 * @return string|null
	 */
	public function getType(): ?string;
	
	/**
	 * Returns true if this parameter should have a lazy loading proxy
	 * @return bool
	 */
	public function isLazy(): bool;
	
	/**
	 * Returns true if a default value exists, false if not
	 * @return bool
	 */
	public function hasDefaultValue(): bool;
	
	/**
	 * Returns the default value or null if there is none
	 * @return mixed
	 */
	public function getDefaultValue();
}
```

## Postcardware
You're free to use this package, but if it makes it to your production environment I highly appreciate you sending me a postcard from your hometown, mentioning which of our package(s) you are using.

You can find my address [here](https://www.neunerlei.eu/). 

Thank you :D 
