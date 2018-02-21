<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use phpish\shopify;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\AdsInsights;
use FacebookAds\Api;
//use FacebookAds\Logger\CurlLogger;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $customers = $em->getRepository('AppBundle:Customer')->findAll();

        $access_token = 'EAAXEKZChyap0BACiGkqYdkE9PiCgdvGgiJZAQFxsFGMfqFXBUZASUaG9k5bPWlG1wbOCvzWJJGDyiq9VFMc4U5vDhkw5bqoUdTW4VgnzTNJ4BFI2ZBWXQEB3L5ZCKxZCwZCSvjKpxkAfiFgrcH7wlTt620kyZC1Vu2ZBY6i4TowP4JXW2ZBViiCWDe9QpMQ3RZB9eLpMRsHJKMpxsZCUXOaVMiuf';
        $ad_account_id = 'act_101892133972563';
        $app_secret = '1e9c463db08a2f64eb7a8422d29c38c8';
        $app_id = '1623068014439069';

        Api::init($app_id, $app_secret, $access_token);
        //$api = Api::instance();
        //$api->setLogger(new CurlLogger());

        $acct = new AdAccount($ad_account_id);
        $account = $acct->read(array(
            AdAccountFields::ID,
            AdAccountFields::NAME,
            AdAccountFields::ACCOUNT_STATUS,
        ));


        /*$fields = array(
            'results',
            'result_rate',
            'reach',
            'frequency',
            'impressions',
            'delivery',
            'social_reach',
            'social_impressions',
            'total_actions',
            'total_unique_actions',
            'relevance_score:score',
            'relevance_score:positive_feedback',
            'relevance_score:negative_feedback',
            'spend',
            'today_spend',
            'impressions_gross',
            'impressions_auto_refresh',
            'cost_per_result',
            'cpp',
            'cpm',
            'cost_per_total_action',
            'actions:page_engagement',
            'actions:like',
            'actions:mention',
            'actions:tab_view',
            'actions:comment',
            'actions:post_engagement',
            'actions:post_reaction',
            'actions:post',
            'actions:photo_view',
            'actions:rsvp',
            'actions:receive_offer',
            'actions:checkin',
            'cost_per_action_type:page_engagement',
            'cost_per_action_type:like',
            'cost_per_action_type:mention',
            'cost_per_action_type:tab_view',
            'cost_per_action_type:comment',
            'cost_per_action_type:post_engagement',
            'cost_per_action_type:post_reaction',
            'cost_per_action_type:post',
            'cost_per_action_type:photo_view',
            'cost_per_action_type:rsvp',
            'cost_per_action_type:receive_offer',
            'cost_per_action_type:checkin',
            'actions:video_view',
            'video_10_sec_watched_actions:video_view',
            'video_30_sec_watched_actions:video_view',
            'video_p25_watched_actions:video_view',
            'video_p50_watched_actions:video_view',
            'video_p75_watched_actions:video_view',
            'video_p95_watched_actions:video_view',
            'video_p100_watched_actions:video_view',
            'video_avg_time_watched_actions:video_view',
            'video_avg_percent_watched_actions:video_view',
            'canvas_avg_view_time',
            'canvas_avg_view_percent',
            'canvas_component_avg_pct_view:canvas_view',
            'cost_per_action_type:video_view',
            'cost_per_10_sec_video_view:video_view',
            'actions:link_click',
            'unique_actions:link_click',
            'outbound_clicks:outbound_click',
            'unique_outbound_clicks:outbound_click',
            'website_ctr:link_click',
            'unique_link_clicks_ctr',
            'outbound_clicks_ctr:outbound_click',
            'unique_outbound_clicks_ctr:outbound_click',
            'call_to_action_clicks',
            'clicks',
            'unique_clicks',
            'ctr',
            'unique_ctr',
            'social_clicks',
            'unique_social_clicks',
            'cost_per_action_type:link_click',
            'cost_per_unique_action_type:link_click',
            'cost_per_outbound_click:outbound_click',
            'cost_per_unique_outbound_click:outbound_click',
            'cpc',
            'cost_per_unique_click',
            'estimated_ad_recallers',
            'estimated_ad_recall_rate',
            'cost_per_estimated_ad_recallers',
            'total_action_value',
            'actions:games.plays',
            'actions:app_engagement',
            'actions:app_install',
            'actions:app_story',
            'actions:app_use',
            'actions:credit_spent',
            'actions:app_custom_event.fb_mobile_achievement_unlocked',
            'actions:app_custom_event',
            'actions:app_custom_event.fb_mobile_add_to_cart',
            'actions:app_custom_event.fb_mobile_add_to_wishlist',
            'actions:app_custom_event.fb_mobile_initiated_checkout',
            'actions:app_custom_event.fb_mobile_content_view',
            'actions:app_custom_event.fb_mobile_spent_credits',
            'actions:mobile_app_install',
            'actions:app_custom_event.fb_mobile_level_achieved',
            'actions:app_custom_event.fb_mobile_add_payment_info',
            'actions:app_custom_event.fb_mobile_purchase',
            'actions:app_custom_event.fb_mobile_rate',
            'actions:app_custom_event.fb_mobile_complete_registration',
            'actions:app_custom_event.fb_mobile_search',
            'actions:app_custom_event.fb_mobile_activate_app',
            'actions:app_custom_event.fb_mobile_tutorial_completion',
            'actions:app_custom_event.other',
            'unique_actions:app_custom_event.fb_mobile_achievement_unlocked',
            'unique_actions:app_custom_event.fb_mobile_add_to_cart',
            'unique_actions:app_custom_event.fb_mobile_add_to_wishlist',
            'unique_actions:app_custom_event.fb_mobile_initiated_checkout',
            'unique_actions:app_custom_event.fb_mobile_content_view',
            'unique_actions:app_custom_event.fb_mobile_spent_credits',
            'unique_actions:app_custom_event.fb_mobile_level_achieved',
            'unique_actions:app_custom_event.fb_mobile_add_payment_info',
            'unique_actions:app_custom_event.fb_mobile_purchase',
            'unique_actions:app_custom_event.fb_mobile_rate',
            'unique_actions:app_custom_event.fb_mobile_complete_registration',
            'unique_actions:app_custom_event.fb_mobile_search',
            'unique_actions:app_custom_event.fb_mobile_activate_app',
            'unique_actions:app_custom_event.fb_mobile_tutorial_completion',
            'cost_per_action_type:games.plays',
            'cost_per_action_type:app_engagement',
            'cost_per_action_type:app_install',
            'cost_per_action_type:app_story',
            'cost_per_action_type:app_use',
            'cost_per_action_type:credit_spent',
            'cost_per_action_type:app_custom_event.fb_mobile_achievement_unlocked',
            'cost_per_action_type:app_custom_event',
            'cost_per_action_type:app_custom_event.fb_mobile_add_to_cart',
            'cost_per_action_type:app_custom_event.fb_mobile_add_to_wishlist',
            'cost_per_action_type:app_custom_event.fb_mobile_initiated_checkout',
            'cost_per_action_type:app_custom_event.fb_mobile_content_view',
            'cost_per_action_type:app_custom_event.fb_mobile_spent_credits',
            'cost_per_action_type:mobile_app_install',
            'cost_per_action_type:app_custom_event.fb_mobile_level_achieved',
            'cost_per_action_type:app_custom_event.fb_mobile_add_payment_info',
            'cost_per_action_type:app_custom_event.fb_mobile_purchase',
            'cost_per_action_type:app_custom_event.fb_mobile_rate',
            'cost_per_action_type:app_custom_event.fb_mobile_complete_registration',
            'cost_per_action_type:app_custom_event.fb_mobile_search',
            'cost_per_action_type:app_custom_event.fb_mobile_activate_app',
            'cost_per_action_type:app_custom_event.fb_mobile_tutorial_completion',
            'cost_per_action_type:app_custom_event.other',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_achievement_unlocked',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_add_to_cart',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_add_to_wishlist',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_initiated_checkout',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_content_view',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_spent_credits',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_level_achieved',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_add_payment_info',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_purchase',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_rate',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_complete_registration',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_search',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_activate_app',
            'cost_per_unique_action_type:app_custom_event.fb_mobile_tutorial_completion',
            'mobile_app_purchase_roas:app_custom_event.fb_mobile_purchase',
            'action_values:app_custom_event',
            'action_values:app_custom_event.fb_mobile_content_view',
            'action_values:app_custom_event.fb_mobile_rate',
            'action_values:app_custom_event.fb_mobile_add_to_cart',
            'action_values:app_custom_event.fb_mobile_add_to_wishlist',
            'action_values:app_custom_event.fb_mobile_initiated_checkout',
            'action_values:app_custom_event.fb_mobile_purchase',
            'action_values:app_custom_event.fb_mobile_spent_credits',
            'action_values:credit_spent',
            'actions:onsite_conversion.purchase',
            'actions:onsite_conversion.flow_complete',
            'actions:leadgen.other',
            'cost_per_action_type:onsite_conversion.purchase',
            'cost_per_action_type:onsite_conversion.flow_complete',
            'cost_per_action_type:leadgen.other',
            'action_values:onsite_conversion.purchase',
            'action_values:onsite_conversion.flow_complete',
            'date_start',
            'date_stop',
            'account_id',
            'account_name',
            'campaign_group_name',
            'campaign_group_id',
            'campaign_name',
            'campaign_id',
            'adgroup_id',
            'adgroup_name',
            'objective',
            'buying_type',
            'start_time',
            'stop_time',
            'bid',
            'budget',
            'schedule',
            'split_test_split',
            'split_test_variable'
        );
        $params = array(
            'level' => 'account',
            'filtering' => array(),
            'breakdowns' => array(),
            'time_range' => array('since' => '2018-01-18','until' => '2018-02-17')
        );
        $fb = new AdAccount($ad_account_id);
        $fb->getInsights($fields, $params)->getResponse()->getContent();
        $fb_pretty = json_encode($fb, JSON_PRETTY_PRINT);*/

        /*\Podio::setup("singularu-m633zx", "8Hk4iuXOMGbwFPGGIdEhkISqlPcLbrb31QMyjpxh3nmy8H45gaGkDWIW6I5FTxrV");
        \Podio::authenticate_with_app(20203929, "5cc45fed29124eb69413f1b8b3a01468");
        $items = \PodioItem::filter(20203929);*/

        // replace this example code with whatever you need
        return $this->render('homepage.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'customers' => $customers,
            'account' => $account
        ));
    }

    /**
     * @Route("/{slug}/", name="pagina")
     */
    public function paginaAction($slug)
    {
        return $this->render($slug . '.html.twig');
    }
}
