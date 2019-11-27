# CallRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enten** | **int** | The extension or phone number of the user initiating the call (ie. 100) | [optional] 
**number** | **int** | The extension or phone number to call (ie. 5145551212) | 
**redirect** | **string** | The HTTP redirect code and URL that the API must answer (usefull from a web browser) | [optional] 
**cid_name** | **string** | Let override the default callerid name (you must specify a \&quot;cid_num\&quot; too) | [optional] 
**cid_num** | **int** | Let overdide the default callerid number (you must own that number at Ubity) | [optional] 
**autoanswer** | **bool** | (&#x27;on&#x27; &#x27;off&#x27; &#x27;1&#x27; or &#x27;0&#x27; The extension will autoanswer if &#x27;on&#x27; or &#x27;1&#x27;) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

