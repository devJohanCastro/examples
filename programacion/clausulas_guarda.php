<?php


public function access()
{
	if( !$isUserExists ){
		return 'User not exists.';
	}
	if( !$isUserActive ){
		return 'User not active.';
	}
	if( !$userHasMembership ){
		return 'User does not have membership.';
	}
	if( !$isPaidMembership ){
		return 'Membership is expired';
	}
	redirectDashboard();
}