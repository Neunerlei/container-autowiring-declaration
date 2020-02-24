<?php
/**
 * Copyright 2020 LABOR.digital
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Last modified: 2020.02.23 at 17:42
 */

namespace Labor\ContainerAutoWiringDeclaration\Definition;


/**
 * Interface AutoWiringClassInterface
 *
 * Describes the auto wiring definition of a single class.
 *
 * @package Labor\ContainerAutoWiringDeclaration\Definition
 */
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
	 * @see \Labor\ContainerAutoWiringDeclaration\InjectableInterface
	 */
	public function getInjectMethods(): array;
}