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
 * Last modified: 2020.02.22 at 00:09
 */

namespace Labor\ContainerAutoWiringDeclaration;

/**
 * Interface InjectableInterface
 *
 * Every class that implements this interface must be scanned by the auto-wirer.
 * All public methods that start with "inject" should automatically be wired as setters of additional dependencies.
 * An inject method can either have a single or multiple properties to be injected.
 * If an inject method does not have any properties it should be skipped without errors.
 *
 * @package Labor\ContainerAutoWiringDeclaration
 */
interface InjectableInterface {
	
}