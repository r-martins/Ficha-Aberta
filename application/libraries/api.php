<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
 * Api
 * Classe responsável pelos métodos de views e construção de erros.
 * 
 * @package	libraries
 * @desc	Classe responsável pelos métodos de construção de erros.
 * @author	David Ruiz;
 * 
 */
class Api
{
	/*
	 * Atributo responsável pelo armazenamento dos erros do portal.
	 * Estão organizados da seguinte forma.
	 * 
	 * 0001 ~ 0099 : Erros do usuario_lib
	 * 0100 ~ 0199 : Erros de album_lib
	 * 
	 */
	private $_errorCodes;
	
	
	/**
	 *	@method __construct
	 *	@desc	Método construtor da classe livrefm
	 *	@param	nothing.
	 *	@return	nothing.
	 */
	public function __construct()
	{
		$this->_errorCodes	=	array(
		// Usuário
		001		=>	"Usuário ou Senha incorreto",
		002		=>	"Usuário inexistente",
		003		=>	"Código de usuário deve ser numérico",
		004		=>	"Usuário não informado ou não carregado",
		005		=>	"Login de Usuário inválido",

                // Usuario Login
		050		=>	"Usuário não está logado",
                    
                // Player
                100             =>      "Id do jogador inválido ou não informado",
                101             =>      "Jogador não encontrado",
                    
		);	
	}

	/**
	 *	@method ok
	 *	@desc	Método para montar a resposta padrão.
	 *	@author	corcioli;
	 *	@param	${Array}$content:	Conteudo.
	 *	@return	types			:	array
	 */
	public function ok($content=array(), $message = null)
	{
            if (is_null($message))
		return array("StatusCode" => 0, "Content" => $content);
            else
		return array("StatusCode" => 0, "StatusMessage" => $message, "Content" => $content);
	}
	
	/**
	 *	@method fail
	 *	@desc	Método de fail, usado básicamente em erros gerados pelo Doctrine.
	 *	@author	corcioli;
	 *	@param	${Exception}$exception:	Exception.
	 *	@return	types				  :	array
	 */
	public function fail($exception)
	{
		$this->_log(1, $exception->getCode(), $exception->getMessage());
		return array("StatusCode" => $exception->getCode(), "StatusMessage" => $exception->getMessage());
	}
	
	/**
	 *	@method error
	 *	@desc	Método para montar uma resposta padrão negativa, (Ex. Usuário Incorreto).
	 *	@author	corcioli;
	 *	@param	${Integer}$errorCode:	Código do erro.
	 *	@param	${String}$errorMessage:	Mensaggem do erro (opcional).
	 *	@return	types				  :	array
	 */
	public function error($errorCode, $errorMessage = "")
	{
		if(array_key_exists($errorCode, $this->_errorCodes))
		{
                    if (strLen($errorMessage) > 0)
			return array("StatusCode" => $errorCode, "StatusMessage" => $this->_errorCodes[$errorCode] . " | " . $errorMessage);
                    else
			return array("StatusCode" => $errorCode, "StatusMessage" => $this->_errorCodes[$errorCode]);
		}
		else
		{
			return array("StatusCode" => $errorCode, "StatusMessage" => $errorMessage);
		}
	}
	
	/**
	 *	@method failAndRedirect
	 *	@desc	Método que redireciona para uma página de erro padrão.
	 *	@author	corcioli;
	 *	@param	${Exception}$exception:	Exception.
	 *	@return	types				  :	void
	 */
	public function failAndRedirect($exception)
	{
		// Código de redirecionamento e chamada de log.
	}
	
	/**
	 *	@method _log
	 *	@desc	Método para criação de logs e envio de mensagens urgentes.
	 *	@author	corcioli;
	 *	@param	${Integer}$logLevel:	Nível critico do erro.
	 *	@param	${Integer}$errorCode:	Código do Erro.
	 *	@param	${String}$errorDesc:	Descrição do Erro.
	 *	@return	types				  :	void
	 */
	public function _log($logLevel, $errorCode, $errorDesc)
	{
		$message = "[{$errorCode}]: {$errorDesc}";
		switch($logLevel)
		{
			case 1: case "1":
				return $this->_writeLog("error", $message);
				break;
			case 2:  case "2":
				$this->_writeLog("error", $message);
				// SENT E-MAIL
				break;
			case 3:  case "3":
				$this->_writeLog("error", $message);
				// SENT E-MAIL
				// SENT SMS
				break;
		}
	}
	
	private function _writeLog($infoLvl, $message)
	{
		return;
		$log_file	=	date("Y-m-d", time()) . "-{$infoLvl}.log";
		$log_path	=	realpath(BASEPATH . "/logs") . "/";
		$file		=	fopen($log_path . $log_file, "a");
		flock($file, LOCK_EX);
		fwrite($file, "\n" . $message);
		flock($file, LOCK_UN);
		fclose($file);
	}
}