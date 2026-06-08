<?php

use PHPUnit\Framework\TestCase;
use Robodocxs\RobodocxsMiddlewareDtos\DTOs\ProductDTO;
use Robodocxs\RobodocxsMiddlewareDtos\DTOs\ProductReferenceDTO;
use Robodocxs\RobodocxsMiddlewareDtos\Enums\ProductReferenceType;
use Robodocxs\RobodocxsMiddlewareDtos\Enums\ProductStatus;
use Spatie\LaravelData\DataCollection;

class ProductDTOTest extends TestCase
{
    public function test_status_defaults_to_null()
    {
        $this->assertNull((new ProductDTO(product_code: 'A'))->status);
    }

    public function test_status_holds_the_product_status_enum()
    {
        $dto = new ProductDTO(product_code: 'A', status: ProductStatus::INACTIVE);

        $this->assertSame(ProductStatus::INACTIVE, $dto->status);
        $this->assertSame('inactive', $dto->status->value);
    }

    public function test_product_status_enum_values()
    {
        $this->assertSame('active', ProductStatus::ACTIVE->value);
        $this->assertSame('inactive', ProductStatus::INACTIVE->value);
        $this->assertSame(ProductStatus::ACTIVE, ProductStatus::tryFrom('active'));
        $this->assertNull(ProductStatus::tryFrom('unknown'));
    }

    public function test_packaging_variant_reference_type()
    {
        $this->assertSame('packaging_variant', ProductReferenceType::PACKAGING_VARIANT->value);
        $this->assertSame(ProductReferenceType::PACKAGING_VARIANT, ProductReferenceType::tryFrom('packaging_variant'));
    }

    public function test_product_references_can_carry_packaging_variants()
    {
        $dto = new ProductDTO(
            product_code: 'BASE',
            product_references: new DataCollection(ProductReferenceDTO::class, [
                new ProductReferenceDTO(product_code: 'BASE0100', type: ProductReferenceType::PACKAGING_VARIANT),
            ]),
        );

        $reference = $dto->product_references->first();

        $this->assertInstanceOf(ProductReferenceDTO::class, $reference);
        $this->assertSame(ProductReferenceType::PACKAGING_VARIANT, $reference->type);
        $this->assertSame('BASE0100', $reference->product_code);
    }
}
