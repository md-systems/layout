<?php

/**
 * @file
 * Contains \Drupal\layout\Plugin\LayoutRegion\LayoutRegionInterface.
 */

namespace Drupal\layout\Plugin\LayoutRegion;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\layout\Plugin\Layout\LayoutBlockAndContextProviderInterface;

/**
 * Provides an interface for static Layout plugins.
 */
interface LayoutRegionInterface extends PluginInspectionInterface {
  /**
   * Returns the user-facing page variant label.
   *
   * @return string
   *   The layout region label.
   */
  public function label();

  /**
   * Returns the admin-facing layout region label.
   *
   * This is for the type of layout region, not the configured variant itself.
   *
   * @return string
   *   The layout region administrative label.
   */
  public function adminLabel();

  /**
   * Returns the unique ID for the layout region.
   *
   * @return string
   *   The layout region ID.
   */
  public function id();

  /**
   * Returns the weight of the layout region.
   *
   * @return int
   *   The layout region weight.
   */
  public function getWeight();

  /**
   * Returns if the region has a parent region.
   *
   * @todo Find a different solution for this?
   *
   * @return bool
   */
  public function getParentRegionId();
}
