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
 * Last modified: 2020.02.24 at 13:21
 */

namespace Neunerlei\ContainerAutoWiringDeclaration\Definition;

/**
 * Interface AutoWiringDefinitionProviderInterface
 *
 * The main repository that creates and stores auto wiring definitions for the classes of you application.
 * The auto-wirer MUST get it's definitions using the definition provider.
 *
 * @package Neunerlei\ContainerAutoWiringDeclaration\Definition
 */
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