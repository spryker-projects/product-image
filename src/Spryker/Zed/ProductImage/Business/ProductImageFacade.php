<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductImage\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;
use Generated\Shared\Transfer\ProductImageSetTransfer;
use Generated\Shared\Transfer\ProductImageTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\ProductImage\Business\ProductImageBusinessFactory getFactory()
 */
class ProductImageFacade extends AbstractFacade implements ProductImageFacadeInterface
{

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductImageTransfer $productImageTransfer
     *
     * @return \Generated\Shared\Transfer\ProductImageTransfer
     */
    public function persistProductImage(ProductImageTransfer $productImageTransfer)
    {
        return $this->getFactory()
            ->createProductImageWriter()
            ->persistProductImage($productImageTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductImageSetTransfer $productImageSetTransfer
     *
     * @return \Generated\Shared\Transfer\ProductImageSetTransfer
     */
    public function persistProductImageSet(ProductImageSetTransfer $productImageSetTransfer)
    {
        return $this->getFactory()
            ->createProductImageWriter()
            ->persistProductImageSet($productImageSetTransfer);
    }

    /**
     * @api
     *
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    public function getProductImagesSetCollectionByProductAbstractId($idProductAbstract)
    {
        return $this->getFactory()
            ->createProductImageReader()
            ->getProductImagesSetCollectionByProductAbstractId($idProductAbstract);
    }

    /**
     * @api
     *
     * @param int $idProduct
     *
     * @return \Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    public function getProductImagesSetCollectionByProductId($idProduct)
    {
        return $this->getFactory()
            ->createProductImageReader()
            ->getProductImagesSetCollectionByProductId($idProduct);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return void
     */
    public function runProductAbstractCreatePlugin(ProductAbstractTransfer $productAbstractTransfer)
    {
        $this->getFactory()
            ->createProductImageWriter()
            ->runProductAbstractCreatePluginRun($productAbstractTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return void
     */
    public function runProductAbstractUpdatePlugin(ProductAbstractTransfer $productAbstractTransfer)
    {
        $this->getFactory()
            ->createProductImageWriter()
            ->runProductAbstractUpdatePlugin($productAbstractTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return void
     */
    public function runProductAbstractReadPlugin(ProductAbstractTransfer $productAbstractTransfer)
    {
        $this->getFactory()
            ->createProductImageReader()
            ->runProductAbstractReadPlugin($productAbstractTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return void
     */
    public function runProductConcreteCreatePlugin(ProductConcreteTransfer $productConcreteTransfer)
    {
        $this->getFactory()
            ->createProductImageWriter()
            ->runProductConcreteCreatePluginRun($productConcreteTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return void
     */
    public function runProductConcreteUpdatePlugin(ProductConcreteTransfer $productConcreteTransfer)
    {
        $this->getFactory()
            ->createProductImageWriter()
            ->runProductConcreteUpdatePlugin($productConcreteTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return void
     */
    public function runProductConcreteReadPlugin(ProductConcreteTransfer $productConcreteTransfer)
    {
        $this->getFactory()
            ->createProductImageReader()
            ->runProductConcreteReadPlugin($productConcreteTransfer);
    }

}
