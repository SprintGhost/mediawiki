<?php

class ApiTestContext extends RequestContext {

	/**
	 * Returns a DerivativeContext with the request variables in place
	 *
	 * @param WebRequest $request WebRequest request object including parameters and session
	 * @param User|null $user User or null
	 * @return DerivativeContext
	 */
	public function newTestContext( WebRequest $request, User $user = null ) {
		$context = new DerivativeContext( $this );
		$context->setRequest( $request );
		if ( $user !== null ) {
			$context->setUser( $user );
		}

		return $context;
	}
}
