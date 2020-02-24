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
 * Last modified: 2020.02.24 at 13:36
 */

namespace Labor\ContainerAutoWiringDeclaration\Definition;

/**
 * Interface AutoWiringParameterInterface
 *
 * Describes the auto wiring definition of a single parameter of a method inside a class.
 *
 * @package Labor\ContainerAutoWiringDeclaration\Definition
 */
interface AutoWiringParameterInterface {
	
	/**
	 * Returns the auto-wiring method definition
	 * @return \Labor\ContainerAutoWiringDeclaration\Definition\AutoWiringMethodInterface
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