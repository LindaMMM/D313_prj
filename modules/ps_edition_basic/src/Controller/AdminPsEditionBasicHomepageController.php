<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

declare(strict_types=1);

namespace PrestaShop\Module\PsEditionBasic\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class AdminPsEditionBasicHomepageController extends AdminPsEditionBasicController
{
    /**
     * Handle the call back requests
     *
     * @return JsonResponse
     */
    public function getSubscription(): JsonResponse
    {
        try {
            $billingService = $this->get('ps_billings.service');
            $response = $billingService->getCurrentSubscription();
            if ($response['success']) {
                return new JsonResponse($response['body']);
            } else {
                return new JsonResponse(['error' => 'No subscription found'], JsonResponse::HTTP_NOT_FOUND);
            }
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e], JsonResponse::HTTP_NOT_FOUND);
        }
    }
}
