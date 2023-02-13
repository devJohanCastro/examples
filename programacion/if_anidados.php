<?php


public function access()
{
	if( $isUserExists ){
		if( $isUserActive ){
			if( $userHasMembership ){
				if( $isPaidMembership ){
					redirectDashboard();
				}else{
					return 'Membership is expired';
				}
			}else{
				return 'User does not have membership.';
			}
		}else{
			return 'User not active.';
		}
	}else{
		return 'User not exists.';
	}
}