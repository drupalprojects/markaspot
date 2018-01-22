<?php

namespace Drupal\markaspot_trend\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'vue.js trend vlock'.
 *
 * @Block(
 *   id = "markaspot_trend_time_block",
 *   admin_label = @Translation("Mark-a-Spot Time Trend"),
 * )
 */
class MarkaspotTrendTimeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'markaspot_trend_time_block',
      '#attached' => array(
        'library' => array(
          'markaspot_trend/dateFormat',
          'markaspot_trend/moment',
          'markaspot_trend/vue',
          'markaspot_trend/vue-router',
          'markaspot_trend/axios',
          'markaspot_trend/chartjs',
          'markaspot_trend/vuechartjs',
          'markaspot_trend/trend',
          'markaspot_trend/time',
        ),
      ),
    );
  }
}
