<?php
    /**
     * @file   modules/spamfilter/lang/ko.lang.php
     * @author NHN (developers@xpressengine.com)
     * @brief Korean language pack (only the more basic)
     **/
    // action related to (Modify)
    $lang->cmd_denied_ip = '스팸 IP 목록';
    $lang->cmd_denied_word = '스팸 키워드 목록';
    // Common words
    $lang->spamfilter = '스팸필터';
    $lang->denied_ip = '금지 IP';
    $lang->interval = '스팸 처리 간격';
    $lang->limit_count = '제한 수';
    $lang->check_trackback = '트랙백 검사';
    $lang->word = '단어';
    $lang->hit = '히트';
    $lang->latest_hit = '최근 히트';
    // Disclaimer
    $lang->about_interval = '지정된 시간 내에 글을 등록하지 못하게 합니다.';
    $lang->about_limit_count = '지정된 시간 내에 제한수를 넘겨서 글 작성을 시도하면 스팸으로 인식, 해당 IP의 글 작성, 댓글 작성, 트랙백 발송 등을 금지합니다.';
    $lang->about_denied_ip = '127.0.0.* 와 같이 * 로 정해진 패턴의 IP 대역을 모두 금지 시킬 수 있습니다.';
    $lang->about_denied_word = '금지 단어로 등록되면 해당 단어가 있는 글은 등록을 금지 시킬 수 있습니다.';
    $lang->about_check_trackback = '한 글에 한 IP에만 트랙백을 허용할 수 있습니다.';
    // Message output
    $lang->msg_alert_limited_by_config = '%s 초 이내에 글 작성은 금지 됩니다. 계속 시도하시면 금지 IP에 등록되실 수 있습니다.';
    $lang->msg_alert_denied_word = '"%s"는 사용 금지된 단어입니다.';
    $lang->msg_alert_registered_denied_ip = '금지 IP에 등록되셔서 정상적인 활동에 제한을 받게 되셨습니다. 문의는 사이트 관리자에게 해주시기 바랍니다.';
    $lang->msg_alert_trackback_denied = '한 글에는 하나의 트랙백만 허용 됩니다.';


	// Add (determine)
	$lang->cmd_interval = '10초 동안 3회 이상 글을 작성하면 스패머로 간주할까요? 글, 댓글 작성과 엮인글 발송을 차단합니다.';
	$lang->cmd_check_trackback = '하나의 글에 2회 이상 엮인글을 등록하면 스패머로 간주할까요? 엮인글을 차단합니다.';
	$lang->about_denied_ip = '\'<em>스팸 IP // 메모</em>\' 형식으로 입력하세요. 여러개의 목록은 줄을 바꾸어 입력하세요.';
	$lang->about_denied_word = '여러개의 목록은 줄을 바꾸어 입력하세요.';
	$lang->add = '추가';
	$lang->yes = '예';
	$lang->no = '아니오';
?>
