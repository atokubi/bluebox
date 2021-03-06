<?php
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.phpdoctrine.org>.
 */

/**
 * Doctrine_Connection_Mssql_TestCase
 *
 * @package     Doctrine
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.phpdoctrine.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Connection_Mssql_TestCase extends Doctrine_UnitTestCase
{
    public function testAlreadyExistsErrorIsSupported() {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 2714, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_ALREADY_EXISTS);
    }

    public function testAlreadyExistsErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 1913, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_ALREADY_EXISTS);
    }

    public function testValueCountOnRowErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 110, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_VALUE_COUNT_ON_ROW);
    }

    public function testNoSuchFieldErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 155, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_NOSUCHFIELD);
    }

    public function testNoSuchFieldErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 207, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_NOSUCHFIELD);
    }

    public function testNoSuchTableErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 208, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_NOSUCHTABLE);
    }

    public function testNoSuchTableErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 3701, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_NOSUCHTABLE);
    }

    public function testSyntaxErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 170, '')));
        
        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_SYNTAX);
    }

    public function testInvalidNumberErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 245, '')));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_INVALID_NUMBER);
    }

    public function testNotNullConstraintErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 515, '')));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_CONSTRAINT_NOT_NULL);
    }

    public function testConstraintErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 547, '')));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_CONSTRAINT);
    }

    public function testConstraintErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 2627, '')));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_CONSTRAINT);
    }

    public function testDivZeroErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo(array(0, 8134, '')));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine::ERR_DIVZERO);
    }
}