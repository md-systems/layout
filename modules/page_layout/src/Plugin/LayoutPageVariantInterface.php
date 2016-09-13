<?php
namespace Drupal\page_layout\Plugin;

use Drupal\Core\Display\VariantInterface;
use Drupal\layout\Plugin\Layout\LayoutBlockAndContextProviderInterface;

interface LayoutPageVariantInterface extends VariantInterface, LayoutBlockAndContextProviderInterface {
  /**
   * Adds a LayoutRegion to the layout regions bag.
   *
   * @param array $configuration
   * @return mixed
   */
  public function addLayoutRegion(array $configuration);

  /**
   * Retrieves a LayoutRegion instance from the layout regions bag.
   *
   * @param $layout_region_id
   *
   * @return \Drupal\layout\Plugin\LayoutRegion\LayoutRegionInterface
   */
  public function getLayoutRegion($layout_region_id);

  /**
   * Remove a LayoutRegion instance from the layout regions bag.
   */
  public function removeLayoutRegion($layout_region_id);

  /**
   * Returns the id the template.
   *
   * @return mixed
   */
  public function getLayoutId();

  /**
   * Returns the
   *
   * @param bool $reset
   * @return mixed
   */
  public function getLayout($reset = FALSE);
}
