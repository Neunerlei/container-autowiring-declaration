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
 * Last modified: 2020.02.24 at 13:35
 */

namespace Labor\ContainerAutoWiringDeclaration\Definition;

/**
 * Interface AutoWiringMethodInterface
 *
 * Describes the auto wiring definition of a single method inside a class.
 *
 * @package Labor\ContainerAutoWiringDeclaration\Definition
 */
interface AutoWiringMethodInterface {
	
	/**
	 * Returns the auto-wiring class definition
	 * @return \Labor\ContainerAutoWiringDeclaration\Definition\AutoWiringClassInterface
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