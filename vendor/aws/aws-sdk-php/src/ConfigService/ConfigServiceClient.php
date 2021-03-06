<?php
namespace ILAB_Aws\ConfigService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with AWS Config.
 *
 * @method \ILAB_Aws\Result deleteConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationRecorderAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDeliveryChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result deliverConfigSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deliverConfigSnapshotAsync(array $args = [])
 * @method \ILAB_Aws\Result describeComplianceByConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComplianceByConfigRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result describeComplianceByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComplianceByResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfigRuleEvaluationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigRuleEvaluationStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfigRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigRulesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfigurationRecorderStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationRecorderStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfigurationRecorders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationRecordersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDeliveryChannelStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryChannelStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDeliveryChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryChannelsAsync(array $args = [])
 * @method \ILAB_Aws\Result getComplianceDetailsByConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceDetailsByConfigRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result getComplianceDetailsByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceDetailsByResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result getComplianceSummaryByConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceSummaryByConfigRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result getComplianceSummaryByResourceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceSummaryByResourceTypeAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourceConfigHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceConfigHistoryAsync(array $args = [])
 * @method \ILAB_Aws\Result listDiscoveredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoveredResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result putConfigRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result putConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationRecorderAsync(array $args = [])
 * @method \ILAB_Aws\Result putDeliveryChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDeliveryChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result putEvaluations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEvaluationsAsync(array $args = [])
 * @method \ILAB_Aws\Result startConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startConfigurationRecorderAsync(array $args = [])
 * @method \ILAB_Aws\Result stopConfigurationRecorder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopConfigurationRecorderAsync(array $args = [])
 */
class ConfigServiceClient extends AwsClient {}
