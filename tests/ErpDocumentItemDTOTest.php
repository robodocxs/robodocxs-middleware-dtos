<?php

use PHPUnit\Framework\TestCase;
use Robodocxs\RobodocxsMiddlewareDtos\DTOs\ErpDocumentItemDTO;
use Robodocxs\RobodocxsMiddlewareDtos\DTOs\CustomDataDTO;
use Spatie\LaravelData\DataCollection;

class ErpDocumentItemDTOTest extends TestCase
{
    public function test_addCustom_initializes_customs_collection_when_null()
    {
        $dto = new ErpDocumentItemDTO();
        
        $this->assertNull($dto->customs);
        
        $result = $dto->addCustom('test_key', 'test_value');
        
        $this->assertInstanceOf(DataCollection::class, $dto->customs);
        $this->assertSame($dto, $result); // Test fluent interface
    }
    
    public function test_addCustom_supports_method_chaining()
    {
        $dto = new ErpDocumentItemDTO();
        
        $result = $dto->addCustom('key1', 'value1')
                     ->addCustom('key2', 'value2');
        
        $this->assertSame($dto, $result);
        $this->assertCount(2, $dto->customs);
    }
    
    public function test_addCustom_creates_custom_data_dto()
    {
        $dto = new ErpDocumentItemDTO();
        
        $dto->addCustom('test_key', 'test_value');
        
        $this->assertCount(1, $dto->customs);
        $customData = $dto->customs->first();
        $this->assertInstanceOf(CustomDataDTO::class, $customData);
        $this->assertEquals('test_key', $customData->key);
        $this->assertEquals('test_value', $customData->value);
    }
    
    public function test_addCustom_handles_null_values()
    {
        $dto = new ErpDocumentItemDTO();
        
        $dto->addCustom('null_key', null);
        
        $this->assertCount(1, $dto->customs);
        $customData = $dto->customs->first();
        $this->assertEquals('null_key', $customData->key);
        $this->assertNull($customData->value);
    }
    
    public function test_getCustom_returns_null_when_customs_is_null()
    {
        $dto = new ErpDocumentItemDTO();
        
        $this->assertNull($dto->customs);
        $this->assertNull($dto->getCustom('test_key'));
    }
    
    public function test_getCustom_returns_null_when_customs_is_empty()
    {
        $dto = new ErpDocumentItemDTO();
        $dto->customs = new DataCollection(CustomDataDTO::class, []);
        
        $this->assertNull($dto->getCustom('test_key'));
    }
    
    public function test_getCustom_method_exists_and_has_correct_signature()
    {
        $dto = new ErpDocumentItemDTO();
        
        // Test that the method exists and is callable
        $this->assertTrue(method_exists($dto, 'getCustom'));
        
        // Test basic functionality without Laravel context
        $reflection = new ReflectionMethod($dto, 'getCustom');
        $this->assertEquals('getCustom', $reflection->getName());
        $this->assertEquals('array|string|null', (string) $reflection->getReturnType());
    }
    
    public function test_quantifier_property_can_be_set_and_retrieved()
    {
        $dto = new ErpDocumentItemDTO(quantifier: 'per_unit');
        
        $this->assertEquals('per_unit', $dto->quantifier);
    }
    
    public function test_quantifier_property_defaults_to_null()
    {
        $dto = new ErpDocumentItemDTO();
        
        $this->assertNull($dto->quantifier);
    }
    
    public function test_quantifier_property_accepts_null_value()
    {
        $dto = new ErpDocumentItemDTO(quantifier: null);
        
        $this->assertNull($dto->quantifier);
    }
}